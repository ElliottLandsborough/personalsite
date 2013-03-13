<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Shorten extends CI_Controller
{
    /**
     * Take in a URL from the form and shorten it
     */
    public function create()
    {
	    $this->load->helper('url');
	    $this->load->helper('string');
		$short_url = "";
		if($this->input->post('url'))
		{
				$url=prep_url($this->input->post('url'));
			$link_length=3;
			// Check to see if this URL has an Alias
			$existing_alias = $this->alias_from_url($url);
			// Generate a new alias if needed
			if (!$existing_alias)
			{
			    $this->load->helper('string');
			    $alias = random_string('alnum',$link_length);
			    $i=0;
			    while ($this->does_alias_exist($alias))
			    {
			    	if ($i=5)
			    	{
			    		$link_length++;
			    	}
			    	$alias=random_string('alnum', $link_length);
			    	$i++;
			    }
			    $this->save_new_alias($url, $alias);
			    $short_url=$alias;
			}
			else
			{
			    $short_url=$existing_alias;
			}
			$data['shorturl']=base_url() . $short_url;
			if($this->input->post('ajax')=='1')
			{
				echo $data['shorturl'];
			}
			else
			{
				$data['title']='your link';
				$this->load->view('header',$data);
				$this->load->view('shorturl',$data);
				$this->load->view('footer');		
			}
		}
		else
		{
			if($this->input->post('ajax')=='1')
			{
				echo 'fail';
			}
			else
			{
				$this->load->view('header');
				$this->load->view('footer');
			}
		}
    }

    /**
     * Method to see if a generated Alias already exists in the table
     * @param type $alias String to check to see if it exists
     * @return Bool True or False
     */
    function does_alias_exist($alias)
    {
		$this->db->select('id');
		$query = $this->db->get_where('links', array('alias' => $alias), 1, 0);
		if ($query->num_rows() > 0)
		{
		    return true;
		}
		else
		{
		    return false;
		}
    }

    /**
     * Save a new Alias to the table
     * @param type $url URL to shorten
     * @param type $alias  The new Alias for this URL
     */
    function save_new_alias($url, $alias)
    {
	$data = array(
	    'alias' => $alias,
	    'url' => $url,
	    'created' => date("Y-m-d H:i:s")
	);

	$this->db->insert('links', $data);
    }

    /**
     * Return an existing Alias, if any
     * @param type $url String, the URL to check
     * @return type $lias String, the alias, if any
     */
    function alias_from_url($url)
    {
		$this->db->select('alias');
		$query = $this->db->get_where('links', array('url' => $url), 1, 0);
		if ($query->num_rows() > 0)
		{
		    foreach ($query->result() as $row)
		    {
				$alias = $row->alias;
		    }
		    return $alias;
		}
		else
		{
			return false;
		}
    }

}

/* End of file Shorten.php */
    /* Location: ./application/controllers/Shorten.php */
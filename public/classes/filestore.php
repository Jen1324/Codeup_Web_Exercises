<?php

//THIS IS THE CODEUP.DEV FILESTORE

class Filestore {

    public $is_csv = false; 

    public $filename = '';

    function __construct($filename = '') 
    {
        $this->filename = $filename;

        if (substr($filename, -3) == 'csv')
        {
            $this->is_csv = true;
        }
        else
        {
            $this->is_csv = false;
        }

        // determine if filename is a csv
        // if so, set is_csv to true
        // address_book.csv
        // todo_list.txt
    }

    /**
     * Returns array of lines in $this->filename
     */

    public function read() 
    {

        if ($this->is_csv) 
        {
            return $this->read_csv();
        }
        else
        {
            return $this->read_lines();
        }
    
    }


    public function write($array) 
    {
        if ($this->is_csv) 
        {
            $this->write_csv($array); 
        }
        else 
        {
            $this->write_lines($array);
        }
    
    }

    private function read_lines() //todolist
    {

        $list = [];
        is_readable($this->filename);
        $filesize = filesize($this->filename);
        $read = fopen($this->filename, 'r');
        feof($read); 
        $todo = trim(fread($read, $filesize));
        $explotodo = explode("\n", $todo);
        foreach ($explotodo as $value) 
        {
            array_push($list, $value);
        }
        return $list;
    }

    /**
     * Writes each element in $array to a new line in $this->filename
     */
    private function write_lines($array)
    {
            $handle = fopen($this->filename, 'w');
            $wrote = fwrite($handle, implode("\n", $save));
                if ($wrote == true) 
                {
                  echo "Save was successful!\n";
                }   else 
                    {
                        echo "Save was unsuccessfull...\n";
                    }
            fclose($handle);
            return $save;
    }

    /**
     * Reads contents of csv $this->filename, returns an array
     */
    private function read_csv() //address book
    {
        $addresses = [];
        $handle = fopen($this->filename, "r");
        while (!feof($handle)) 
        {
            $row = fgetcsv($handle);
            if(is_array($row)) 
            {
                $addresses[] = $row;
            }
        }
        fclose($handle);
        return $addresses;
    }

    /**
     * Writes contents of $array to csv $this->filename
     */
    private function write_csv($array)
    {
        if (is_writable($this->filename)) 
        {
            $handle = fopen($this->filename, "w");
            foreach($array as $entries) 
            {
                fputcsv($handle, $entries);
            }
        fclose($handle);
        }
    }
}

<?php 

class Conversation {

    // Property to hold name
    private $name = '';

    /**
     * Optional - allows name to be passed 
     * when the class is instantiated
     */
    public function __construct($name = '')
    {
        $this->name = $name;
        echo $this->name;
    }

    /**
     * Setter for $name
     * Filters and prepares $name
     */
    private function set_name($name) 
    {
        // Check if $name is a string
        if (is_string($name)) {
            // Set the name property
            // Trim all leading and trailing whitespace 
            $this->name = trim($name);
        }

    }

    /**
     * Method to say hello to name
     */
    function say_hello($new_line = FALSE) 
    {
        // Set the greeting name
        $greeting = "Hello {$this->name}";

        // Return the greeting, checking for newline
        return $new_line == TRUE ? "$greeting\n" : $greeting;
    }

}
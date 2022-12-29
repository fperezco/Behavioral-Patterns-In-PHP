<?php

namespace App\Behavioral_Patterns\Template_Method\Classes;

/**
 * Custom implementation that follows steps using a file
 */
class FileUsersProcessor extends UsersProcessor
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    function retrieveUserLists(): array
    {
        $handle = fopen($this->filePath, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
               $this->users[] = $line;
            }

            fclose($handle);
        }
        return [];
    }

    function hook1(): void
    {
        // TODO: Implement hook1() method.
    }

    function returnResultsReport(): void
    {
        //create a file with the repo results and save near the first one
    }
}
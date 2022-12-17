<?php
$folderPath = 'Z:\\';

try {
    $dirIterator = new \RecursiveDirectoryIterator($folderPath);
    /** @var \RecursiveDirectoryIterator | \RecursiveIteratorIterator $it */
    $it = new \RecursiveIteratorIterator($dirIterator);

    // the valid() method checks if current position is valid eg there is a valid file or directory at the current position
    while ($it->valid()) {
        // isDot to make sure it is not current or parent directory
        if ($it->isDot() && !$it->isFile() && $it->isReadable()) {

            // $file is a SplFileInfo instance
            $file = $it->current();
            $filePath = $it->getPathname();
            // do something about the file
            // ...
            echo $filePath.'</br>';
        }

        $it->next();
    }
} catch (\Exception $e) {
    throw $e;
}
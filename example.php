<?php
$gitPath = 'C:/Program Files/Git/bin/git.exe';
$repositoryPath = '/path/to/your/repository'; // Replace with the actual path to your desired repository
$commitMessage = 'Initial commit';
$remoteName = 'origin';
$remoteUrl = 'https://github.com/mohit-ram-gupta/testrepo'; // Replace with your repository's HTTPS URL

// Change working directory to the desired repository path
chdir($repositoryPath);

// Step 1: Initialize a new Git repository
$initCommand = "$gitPath init";
$initOutput = shell_exec($initCommand);

if ($initOutput === null) {
    echo "Error executing the git init command.";
} else {
    echo "<pre>$initOutput</pre>";

    // Step 2: Create and add files
    $createFileCommand = 'echo "Hello, Git!" > example.txt';
    $addCommand = "$gitPath add .";

    shell_exec($createFileCommand);
    $addOutput = shell_exec($addCommand);

    if ($addOutput === null) {
        echo "Error executing the git add command.";
    } else {
        echo "<pre>$addOutput</pre>";

        // Step 3: Commit changes
        $commitCommand = "$gitPath commit -m \"$commitMessage\"";
        $commitOutput = shell_exec($commitCommand);

        if ($commitOutput === null) {
            echo "Error executing the git commit command.";
        } else {
            echo "<pre>$commitOutput</pre>";

            // Step 4: Add a remote
            $addRemoteCommand = "$gitPath remote add $remoteName $remoteUrl";
            $addRemoteOutput = shell_exec($addRemoteCommand);

            if ($addRemoteOutput === null) {
                echo "Error executing the git remote add command.";
            } else {
                echo "<pre>$addRemoteOutput</pre>";

                // Step 5: Push to the remote
                $pushCommand = "$gitPath push -u $remoteName master";
                $pushOutput = shell_exec($pushCommand);

                if ($pushOutput === null) {
                    echo "Error executing the git push command.";
                } else {
                    echo "<pre>$pushOutput</pre>";
                    echo "Git initialization, commit, remote add, and push successful!";
                }
            }
        }
    }
}
?>




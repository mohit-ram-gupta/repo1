<?php
// $repository = 'https://github.com/mohit-ram-gupta/Being-api';
// $branch = 'master';
// $gitPath = '"C:/Program Files/Git/bin/git.exe"';


// $localRepositoryPath = 'C:\wamp64\www\gitCode';

// $gitPushCommand = "$gitPath push origin $branch 2>&1";

// $output = exec($gitPushCommand);

// echo "<pre>$output</pre>";


// $commandCheckout = "$gitPath checkout txt";
// $outputCheckout = shell_exec($commandCheckout);

// if ($outputCreateBranch === null || $outputCheckout === null) {
//     echo "Error executing the git branch or checkout command.";
// } else {
//     echo "<pre>Create branch command: $outputCreateBranch</pre>";
//     echo "<pre>Checkout command: $outputCheckout</pre>";
// }


// $command2= "$gitPath status";
// $output2 = shell_exec($command2);

// if ($command2 === null) {
//     echo "Error executing the git init command.";
// } else {
//     echo "<pre>Init status : $output2</pre>";

// }


// $command3= "$gitPath add . ";
// $output3 = shell_exec($command3);

// if ($command3 === null) {
//     echo "Error executing the git init command.";
// } else {
//     echo "<pre>Init add : $output3</pre>";

// }

// $command4= "$gitPath status";
// $output4 = shell_exec($command4);

// if ($command4 === null) {
//     echo "Error executing the git init command.";
// } else {
//     echo "<pre>Init after add status  : $output4</pre>";

// }

// $command5= "$gitPath commit -m 'just3' ";
// $output5 = shell_exec($command5);

// if ($command5 === null) {
//     echo "Error executing the git init command.";
// } else {
//     echo "<pre>Init commit : $output5</pre>";

// }

// $command6= "$gitPath remote add origin $repositoryUrl ";
// $output6 = shell_exec($command6);

// if ($command6 === null) {
//     echo "Error executing the git init command.";
// } else {
//     echo "<pre>Init remote add : $output6</pre>";

// }

// // $command7= "$gitPath pull  origin master ";
// // $output7 = shell_exec($command7  . ' 2>&1');

// // if ($output7 === null) {
// //     echo "Error executing the git pull command.";
// // } else {
// //     echo "<pre>Init pull: $output7</pre>";
// // }


// $command8 = "$gitPath clone $repositoryUrl";
// $output8 = shell_exec($command8 . ' 2>&1'); // Added space before '2>&1'

// if ($output8 === null) {
//     echo "Error executing the git clone command.";
// } else {
//     echo "<pre>Clone output: $output8</pre>";
// }

// // $command9 = "$gitPath push -u origin master";

// // $output9 = shell_exec("$command9 2>&1");

// // if ($output9 === null) {
// //     echo "Error executing the git push command.";
// // } else {
// //     echo "<pre>Init pull: $output9</pre>";
// // }


$gitPath = '"C:/Program Files/Git/bin/git.exe"';
$repositoryUrl = 'https://github.com/mohit-ram-gupta/testingrepo';
$result = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $commandType = $_POST['command'];
    $remoteName = $_POST['remote-name'];
    $remoteURL = $_POST['url'];
    

    switch ($commandType) {
        case 'init':
            $command = "$gitPath init";
            $output = shell_exec($command);
            if ($output === null) {
                $result = "Error executing the git init command.";
            } else {
                $result = "<pre>Init command : $output</pre>";
            }
            break;
    
        case 'status':

            $command2= "$gitPath status";
            $output2 = shell_exec($command2);

            if ($command2 === null) {
                $result= "Error executing the git status command.";
            } else {
                $result= "<pre>Init after add status  : $output2</pre>";

            }
             break;

               case 'add':
             $command3= "$gitPath add . ";
                $output3 = shell_exec($command3);

                if ($command3 === null) {
                    $result = "Error executing the git init command.";
                } else {
                    $result = "<pre>Init add : $output3</pre>";

                }
                break;


        case 'clone':

                $command8 = "$gitPath clone $repositoryUrl";
                $output8 = shell_exec($command8 . ' 2>&1'); 
                if ($output8 === null) {
                    $result = "Error executing the git clone command.";
                } else {
                    $result= "<pre>Clone output: $output8</pre>";
                }
                 break;

                case 'pull' :

                $command7= "$gitPath pull  origin master ";
                $output7 = shell_exec($command7  . ' 2>&1');

                if ($output7 === null) {
                    $result = "Error executing the git pull command.";
                } else {
                    $result = "<pre>Init pull: $output7</pre>";
                }
                 break;

                 case 'remote' :

                 $command6= "$gitPath remote add $remoteName $remoteURL ";
                    $output6 = shell_exec($command6);

                    if ($command6 === null) {
                        $result = "Error executing the git init command.";
                    } else {
                        $result = "<pre>Init remote add : $output6</pre>";

                    }
                    break;

                    case 'branch' :

                    $command11 = "$gitPath branch";
                    $output11 = shell_exec($command11);
                    if ($command11 === null) {
                        $result = "Error executing the git init command.";
                    } else {
                        $result = "<pre>Branch : $output11</pre>";

                    }
                    break;

                    case 'checkout' :
                    $commandCreateBranch = "$gitPath checkout master1 2>&1";
                    $outputCreateBranch = shell_exec($commandCreateBranch);

                    if ($commandCreateBranch === null) {
                        $result =  "Error executing the git init command.";
                    } else {
                        $result = "<pre>Switch branch : $outputCreateBranch</pre>";

                    }
                    break;

                    case 'commit' :
                    $command5= "$gitPath commit -m 'just5' ";
                    $output5 = shell_exec($command5);

                    if ($command5 === null) {
                        $result = "Error executing the git init command.";
                    } else {
                        $result = "<pre>Init commit : $output5</pre>";

                    }
                    break;

                    case 'push':

                    $username = 'mohit-ram-gupta';
                    $accessToken = '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';
                    $repository = "https://$username:$accessToken@github.com/mohit-ram-gupta/repo1.git";

                    $gitPath = '"C:/Program Files/Git/bin/git.exe"';
                    $localRepositoryPath = 'C:/wamp64/www/gitCode';
                    $branch = 'master';

                    // shell_exec("$gitPath -C \"$localRepositoryPath\" remote set-url push1 $repository");

                    $gitPushCommand = "$gitPath -C \"$localRepositoryPath\" push push1 master 2>&1";

                    $output = shell_exec($gitPushCommand);

                    if ($output === null) {
                        $result = "Error executing push command";
                    } else {
                        $result = "<pre>$output</pre>";
                    }

                    break;



        default:
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container text-center">
  <h2>Git Command</h2>

  <form method="post" action="">
    <button type="submit" class="btn btn-info" name="command" value="init">Git Init</button>
    <button type="submit" class="btn btn-primary" name="command"  value="status">Git Status</button>
      <button type="submit" class="btn btn-success" name="command" value="add">Git Add</button>

      <button type="submit" class="btn btn-danger" name="command" value="commit">Git Commit</button>

      <button type="submit" class="btn btn-warning" name="command" value="push">Git Push</button>

      <button type="submit" class="btn btn-danger" name="command" value="pull">Git Pull</button>

      <button type="submit" class="btn btn-warning" name="command" value="clone">Git Clone</button>

      <button type="button" class="btn" name="command"  data-toggle="modal" data-target="#myModal" value="remote">Git Remote</button>

      <button type="button" class="btn" name="command"  data-toggle="modal" data-target="#myModal1" value="remote">Git Switch Branch</button>

      <button type="submit" class="btn btn-warning" name="command" value="branch">Git Check Branch</button>

      <button type="submit" class="btn btn-danger" name="command" value="checkout">Git Switch Branch</button>

      </form>

  <div style="margin-top: 15px; width: auto; marfin-left: 0px; margin-left: auto; margin-right: auto;"><?php echo $result; ?></div>   
</div>
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add remote name and remote URL</h4>
        </div>
        <div class="modal-body">
            <form method="post">
            <input type="hidden" name="command" value="remote">
          <div class="form-group">
            <label for="exampleInputEmail1">Remote Name</label>
            <input type="text" name="remote-name" class="form-control" id="" placeholder="Enter remote name">
           
          </div>
                 <div class="form-group">
            <label for="exampleInputEmail1">Remote Repository URL</label>
            <input type="url" name="url" class="form-control" id="" placeholder="Remote Repository URL">
            
          </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>
  </div>
</div>











<div class="container">
  <!-- Modal -->
  <div class="modal1 fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add remote name and remote URL</h4>
        </div>
        <div class="modal-body">
            <form method="post">
            <input type="hidden" name="command" value="remote">
          <div class="form-group">
            <label for="exampleInputEmail1">Remote Name</label>
            <input type="text" name="remote-name" class="form-control" id="" placeholder="Enter remote name">
           
          </div>
                 <div class="form-group">
            <label for="exampleInputEmail1">Remote Repository URL</label>
            <input type="url" name="url" class="form-control" id="" placeholder="Remote Repository URL">
            
          </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>




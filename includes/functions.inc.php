<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) 
{
    $result = True;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat))
    {
        $result = true;
    }
    else
    {
        $result = false;        
    }

    return $result;
}

function invalidUid($username)
{
    $result = True;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        $result = true;
    }
    else
    {
        $result = false;        
    }

    return $result;
}

function invalidEmail($email)
{
    $result = True;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $result = true;
    }
    else
    {
        $result = false;        
    }

    return $result;
}

function pwdMatch($pwd, $pwdRepeat)
{
    $result = True;
    if ($pwd !== $pwdRepeat)
    {
        $result = true;
    }
    else
    {
        $result = false;        
    }

    return $result;
}

function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    //check if prepared statment is even possible with current data
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../signup.php?error=stmtfailed");
        exit();        
    }

    //bind all required params to prepared stmt
    mysqli_stmt_bind_param($stmt,  "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData))
    {
        return $row;
    }
    else
    {
        $result = false;
        return $result;        
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd)
{
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    //check if prepared statment is even possible with current data
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../signup.php?error=stmtfailed");
        exit();        
    }

    //hash password for security, not sure what default actually does
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    //bind all required params to prepared stmt
    mysqli_stmt_bind_param($stmt,  "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd)
{
    $result = True;
    if (empty($username) || empty($pwd))
    {
        $result = true;
    }
    else
    {
        $result = false;        
    }

    return $result;
}

function loginUser($conn, $username, $pwd)
{
    //get assoc array
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false)
    {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false)
    {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true)
    {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
    }
}
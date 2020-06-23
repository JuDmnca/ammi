<?php
require("database.php");

class Users {
    function get_user($id)
    {
        global $pdo;

        $request = "SELECT * FROM Users WHERE id = $id";
        $resultat = $pdo->query($request);
        $user = $resultat->fetch();

        return($user);
    }

    function create($username, $password)
    {
        global $pdo;

        $request = $pdo->prepare('INSERT INTO Users (username, password) VALUES (?, ?)');
        $request->execute([$username, $password]);
    }

    function connect($username, $password)
    {
        global $pdo;

        $request = "SELECT * FROM Users WHERE username=\"$username\"";
        $resultat = $pdo->query($request);
        $user = $resultat->fetch();

        if($password == $user["password"])
        {
            session_start();
            $_SESSION["account"] = [
                'id' => $user["id"],
                'username' => $user["username"]
            ];

            header("Location: /ammi%20/about.php");
        }
        else
        {
            echo(" Impossible de se connecter");
        }
    }
}

class works {
    function get_works()
    {
        global $pdo;

        $request = "SELECT * FROM works";
        $resultat = $pdo->query($request);
        $work = $resultat->fetchAll();

        return($work);
    }

    function get_work($id)
    {
        global $pdo;

        $request = "SELECT * FROM works WHERE id = $id";
        $resultat = $pdo->query($request);
        $work = $resultat->fetch();

        return($work);
    }

    function create($title, $date, $description, $media, $video, $artist, $link)
    {
        global $pdo;

        $request = $pdo->prepare('INSERT INTO works (title, date, description, media, video, artist, link) VALUES (?, ?, ?, ?, ?, ?)');
        $request->execute([$title, $date, $description, $media, $video, $artist, $link]);
    }

    function update($title, $date, $description, $media, $video, $artist, $link, $id)
    {
        global $pdo;

        $request = $pdo->prepare('UPDATE works SET title=?, date=?, description=?, media=?, video=?, artist=?, link=? WHERE id=?');
        $request->execute([$title, $date, $description, $media, $video, $artist, $link, $id]);
    }

}
?>

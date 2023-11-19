<?php
                // create connection for the database
                $connect = mysqli_connect('localhost', 'root', '', 'db_blog');

                if (isset($_POST['submit'])) {
                    // code...
                    $message = mysqli_real_escape_string($connect, $_POST['notification']);
                    $sql = "INSERT INTO notify (notification) VALUES ('$message')";
                    $query_run = mysqli_query($connect, $sql);
                }
                $result = mysqli_query($connect, "SELECT * FROM notify LIMIT 1");
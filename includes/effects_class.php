<?php
    class effects extends dbconnect {
        public function showEffects() {
            $sql = "SELECT * FROM effects ORDER BY downloads DESC, id ASC;";
            $res = $this->connect()->query($sql);
            if($res->num_rows>0) {
                while($row = $res->fetch_array()) {
                    echo "<div class='card'>";

                        echo "<div class='effectpreview'>";
                            echo "<iframe width='150' height='94' src='$row[2]' title='Effect $row[0]' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                        echo "</div>";

                        echo "<div class='downloadform'>";
                            echo "<form action='src/download.php?effect_id=$row[0]' method='POST'>";
                                echo "<button type='submit'><i class='fa-solid fa-download'></i> Pobierz</button>";
                            echo "</form>";
                        echo "</div>";

                        echo "<div>";
                            echo "<p>Ilość pobrań: $row[1]</p>";
                        echo "</div>";

                    echo "</div>";
                }
            } else {
                echo "NULL ZYXELPRAWKO";
            }
        }

        public function downloadEffect($page){
            $_page = mysqli_real_escape_string($this->connect(), $page);
            $filepath = '../effects/'.$_page.'.rar';
            if(file_exists($filepath)) {
                $sql = "UPDATE effects SET downloads = downloads+1 WHERE id=$_page";
                if($this->connect()->query($sql)) {
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($filepath));
                    flush();
                    readfile($filepath);
                    return true;
                }
            } else
                return false;
        }
    }
?>
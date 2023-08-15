<?php

class AssignmentView
{

    function __construct()
    {
    }

    function assignmentp1()
    {

        echo '<h4>Web Design</h4>
        <p>1. <b>Transmission Control Protocol</b> is a connection-oriented protocol that is widely used for data transfer over network connections on the internet and networks.
            <br>2. <b>Internet Protocol address</b> is an address used in a computer network to uniquely address a network card of a host within the TCP/IP model.
            <br>3. <b>Domain Name System</b> is the system and network protocol used on the internet to translate computer names to numerical addresses (IP addresses) and vice versa.
            <br>4. <b>Router</b> is a device that connects two or more different computer networks with efficient routing from node to node.
            <br>5. <b>Web server</b> is a program that receives HTTP requests via a network and sends documents to the client.
            <br>6. <b>HyperText Markup Language</b> is the standard markup language for web pages.
            <br>7. <b>HyperText Markup Language element</b> is a component of the Document Object Model (DOM) used to display web pages structured with HTML.
            <br>8. When a server sends a file, it is accompanied by a <b>header</b> that contains information about what the server is sending, including the content type.
            <br>9. <b>Keywords</b> or meta tags are information about the content of the web page that is used by search engines.
            <br>10. The purpose of a <b>description</b> is to provide a summary of the web page, which is displayed in search results.
            <br>11. By using the <b>"view page source" button</b> , you can view the source code of the web page.
            <br>12. When <b>inspecting</b> an element, it is easier to see and identify which part of the code you are looking at and what formatting or references are associated with it.
            <br>13. <b>CSS stands for Cascading Style Sheets</b> it  styles web pages, separating design from structure. It controls colors, fonts, layouts and ensures consistency and visual appeal.
            <br>14. Styling can be done in-line or by referring to, for example, the CSS file. <b>Styling properties</b> can be set by specifying values/datatypes or using references e.g. hexadecimal color codes, RGB values, or color names.
            <br>15. The CSS file is read first and then the html/contents. Because the last line of code read takes takes presedence, initiated <b>in-line styling overrules css</b>.
            
            </p>
        ';
    }


    function assignmentp4()
    {
        echo '<h4>PHP, OOP and MySQL</h4>
        <p>
        <h5>Sample 1: for loop</h5>
        <pre>
        &lt;?php
            for ( $i = 1; $i <= 10; $i++) {
                echo $i ;
            }
        ?&gt;
            </pre>
                <p>
                    Result:';
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
        }
        echo '
                </p><br>
                <h5>Sample 2: while loop</h5>
                <pre>
        &lt;?php
            $i = 1; 
            while ( $i <= 10 ) {
                echo $i ;
                $i++ ;
            }
        ?&gt;
            </pre>
                <p>
                    Result:';
        $i = 1;
        while ($i <= 10) {
            echo $i;
            $i++;
        }
        echo '        </p><br>
                <h5>Sample 3: do while </h5>
                <pre>
        &lt;?php
            $i = 0; 
            do {
                echo $i ;
                $i++;
            } while ( $i <= 10 ); 
        ?&gt;
            </pre></p>
        <p>
            Result:';
        $i = 1;
        do {
            echo $i;
            $i++;
        } while ($i <= 10);

        echo '</p><br>
        <h5>Sample 4: functies </h5>
        <p>
            substr("Willy Wonka", 4); <br>
            result:';
        echo substr("Willy Wonka", 4);
        echo ' <br><br>
            is_numeric(32); is_numeric(true) <br>
            result:';
        echo is_numeric(32);
        echo is_numeric(true);
        echo '<br><br>';
        echo 'if (isset(null)); if (isset(4)) echo<br>
            result:';
        $a = null;
        if (isset($a)) {
            echo "Variable 1# is set.<br>";
        } else {
            echo "Variable 1# is NOT set.<br>";
        }
        echo '
            result: ';
        $b = 4;
        if (isset($b)) {
            echo "Variable 2# is set.<br>";
        } else {
            echo "Variable 2# is NOT set.<br>";
        };
        echo '<br>
            mail("someone@example.com","My subject",$msg);<br>
            result: Check your email inbox.
        </p><br>';

        echo '<br> Loaded: assignmentp4 function';
    }
}

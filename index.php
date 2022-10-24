<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="particles.css">
    <link rel="stylesheet" href="style.css">
    <title>Cryptography x Nyan Cat</title>
</head>

<body>
    <div id="home" class="home-wrapper">

        <!-- particles.js container -->
        <div id="particles-js"></div>

        <div class="audio-wrapper" style="position: fixed; ">
            <audio controls loop autoplay style="left: 0; bottom: 0; margin: 20px;">
                <source src="assets/original.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>

        <div class="text">
            <h1 class="chrome">CRYPTOGRAPHY</h1>
            <h3 class="dreams">X&nbsp;&nbsp;&nbsp;Nyan Cat</h3>
        </div>

        <div class="wrapper">
            <button id="button-start" class="cta" href="#">
                <span>LET'S GO!</span>
                <span>
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                            <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                            <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                        </g>
                    </svg>
                </span>
            </button>
        </div>
    </div>

    <div id="content-main" class="container hidden">

        <button id="button-back" class="cta" href="#">
            <span>BACK!</span>
            <span>
                <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                    </g>
                </svg>
            </span>
        </button>

        <div id="content" style="position:relative;">
            <img class="image-nyan" src="assets/nyan_cat.gif" alt="nyan-cat" style="position:absolute; top:-230px; right:0px; width:100rem; z-index:-1;">
        </div>

        <div class='browser-window'>

            <div class='top-bar'>
                <div class='circles'>
                    <div class="circle circle-red"></div>
                    <div class="circle circle-yellow"></div>
                    <div class="circle circle-green"></div>
                </div>
            </div>
            <div class='content'>
                <div class="tab">
                    <button class="tablinks active" onclick="openCity(event, 'Affine')">Affine</button>
                    <button class="tablinks" onclick="openCity(event, 'Caesar')">Caesar</button>
                    <button class="tablinks" onclick="openCity(event, 'Atbash')">Atbash</button>
                    <button class="tablinks" onclick="openCity(event, 'Hill')">Hill</button>
                    <button class="tablinks" onclick="openCity(event, 'Playfair')">Playfair</button>
                    <button class="tablinks" onclick="openCity(event, 'Transposisi')">Transposition</button>
                    <button class="tablinks" onclick="openCity(event, 'Vignere')">Vignere</button>
                </div>

                <div id="Affine" class="tabcontent" style="display: block;">

                    <h3>Affine Cipher</h3>
                    <p>
                        The Affine cipher is a special case of the more general monoalphabetic substitution cipher.
                    </p>
                    <hr>
                    <input type="text" id="p" name="p" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Plain Text">
                    <input type="text" id="c" name="c" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Cipher Text">
                    <hr>
                    <table>
                        <tr>
                            <td>
                                <p style="font-size: 20px; font-family: FlappyBird; margin: 0;">A</p>
                            </td>
                            <td>
                                <p style="font-size: 20px; font-family: FlappyBird; margin: 0; margin-left: 20px;">B</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select class="pixel-input-small is-circle-small gradient" id="mult" name="mult" size="1">
                                    <option>1</option>
                                    <option>3</option>
                                    <option>5</option>
                                    <option>7</option>
                                    <option>9</option>
                                    <option>11</option>
                                    <option>15</option>
                                    <option>17</option>
                                    <option>19</option>
                                    <option>21</option>
                                    <option>23</option>
                                    <option>25</option>
                                </select>
                            </td>
                            <td>
                                <select class="pixel-input-small is-circle-small gradient" id="add" name="add" size="1" style="margin-left: 20px;">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <button name="btnEn" onclick="encrypt_affine()" class="nes-btn is-warning">Encrypt</button>
                    <button name="btnDe" onclick="decrypt_affine()" class="nes-btn is-warning">Decrypt</button>
                </div>

                <div id="Caesar" class="tabcontent">
                    <h3>Caesar Cipher</h3>
                    <p>The Caesar cipher is one of the earliest known and simplest ciphers. It is a type of substitution cipher in which each letter in the plaintext is 'shifted' a certain number of places down the alphabet.</p>
                    <hr>
                    <input type="text" id="text" name="text" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Text">
                    <hr>
                    <table>
                        <tr>
                            <td>
                                <p style="font-size: 20px; font-family: FlappyBird; margin: 0;">Shift</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="shift" name="shift" class="pixel-input-small is-circle-small gradient" autocomplete="off" placeholder="Shift">
                            </td>
                        </tr>
                    </table>

                    <button name="btnEn" onclick="app.doCryptCaesar(false)" class="nes-btn is-warning">Encrypt</button>
                    <button name="btnDe" onclick="app.doCryptCaesar(true)" class="nes-btn is-warning">Decrypt</button>
                </div>

                <div id="Atbash" class="tabcontent">
                    <h3>Atbash Cipher</h3>
                    <p>
                        The Atbash cipher is a substitution cipher with a specific key where the letters of the alphabet are reversed. I.e. all 'A's are replaced with 'Z's, all 'B's are replaced with 'Y's, and so on. It was originally used for the Hebrew alphabet, but can be used for any alphabet.
                    </p>
                    <hr>
                    <input type="text" id="plain" name="p" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Plain Text">
                    <input type="text" id="chiper" name="c" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Cipher Text">
                    <hr>

                    <button name="btnEn" onclick="encode_atbash()" class="nes-btn is-warning">Encrypt</button>
                    <button name="btnDe" onclick="decode_atbash()" class="nes-btn is-warning">Decrypt</button>
                </div>

                <div id="Hill" class="tabcontent">
                    <h3>Hill Cipher</h3>
                    <p>
                        Invented by Lester S. Hill in 1929, the Hill cipher is a polygraphic substitution cipher based on linear algebra. Hill used matrices and matrix multiplication to mix up the plaintext.
                    </p>
                    <hr>
                    <input type="text" id="plain_hill" name="p" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Plain Text">
                    <input type="text" id="cipher_hill" name="c" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Cipher Text">
                    <hr>
                    <table>
                        <tr>
                            <td>
                                <p style="font-size: 20px; font-family: FlappyBird; margin: 0;">Key</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="key_hill" name="key" class="pixel-input-small is-circle-small gradient" autocomplete="off" placeholder="Ex: 3 4 19 11">
                            </td>
                        </tr>
                    </table>

                    <button name="btnEn" onclick="encode_hill()" class="nes-btn is-warning">Encrypt</button>
                    <button name="btnDe" onclick="decode_hill()" class="nes-btn is-warning">Decrypt</button>
                </div>

                <div id="Playfair" class="tabcontent">
                    <h3>Playfair</h3>
                    <p>
                        The Playfair cipher was the first practical digraph substitution cipher. The scheme was invented in 1854 by Charles Wheatstone, but was named after Lord Playfair who promoted the use of the cipher. The technique encrypts pairs of letters (digraphs), instead of single letters as in the simple substitution cipher.
                    </p>
                    <hr>
                    <input type="text" id="plain_playfair" name="p" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Plain Text">
                    <input type="text" id="cipher_playfair" name="c" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Cipher Text">
                    <hr>
                    <table>
                        <tr>
                            <td>
                                <p style="font-size: 20px; font-family: FlappyBird; margin: 0;">Keysquare</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="keysquare" size="25" maxchars="25" value="monarchybdefgiklpqstuvwxz" name="key" class="pixel-input-small is-circle-small gradient" autocomplete="off" placeholder="Keysquare" style="width: 20rem;">
                                <button onclick="GenRandKey()" class="pixel-input-small is-circle-small gradient" style="margin-left: 15px;">Generate Random Key</button>
                            </td>
                        </tr>
                    </table>

                    <button name="btnEn" onclick="encode_playfair()" class="nes-btn is-warning">Encrypt</button>
                    <button name="btnDe" onclick="decode_playfair()" class="nes-btn is-warning">Decrypt</button>

                </div>

                <div id="Transposisi" class="tabcontent">
                    <h3>Columnar Transposition Cipher</h3>
                    <p>
                        The columnar transposition cipher is a fairly simple, easy to implement cipher. It is a transposition cipher that follows a simple rule for mixing up the characters in the plaintext to form the ciphertext.
                    </p>
                    <hr>
                    <input type="text" id="plain_trans" name="p" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Plain Text">
                    <input type="text" id="cipher_trans" name="c" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Cipher Text">
                    <hr>
                    <table>
                        <tr>
                            <td>
                                <p style="font-size: 20px; font-family: FlappyBird; margin: 0;">Keyword</p>
                            </td>
                            <td>
                                <p style="font-size: 20px; font-family: FlappyBird; margin: 0; margin-left: 20px;">Pad character</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="key" name="key" value="zebra" class="pixel-input-small is-circle-small gradient" autocomplete="off" placeholder="Key">
                            </td>
                            <td>
                                <input type="text" id="pc" name="pc" value="x" class="pixel-input-small is-circle-small gradient" autocomplete="off" placeholder="Pad character" style="margin-left: 20px;">
                            </td>
                        </tr>
                    </table>

                    <button name="btnEn" onclick="encode_trans()" class="nes-btn is-warning">Encrypt</button>
                    <button name="btnDe" onclick="decode_trans()" class="nes-btn is-warning">Decrypt</button>
                </div>

                <div id="Vignere" class="tabcontent">
                    <h3>Vigenere</h3>
                    <p>
                        The Vigenère Cipher is a polyalphabetic substitution cipher. The method was originally described by Giovan Battista Bellaso in his 1553 book La cifra del. Sig. Giovan Battista Bellaso; however, the scheme was later misattributed to Blaise de Vigenère in the 19th century, and is now widely known as the Vigenère cipher.
                    </p>
                    <hr>
                    <input type="text" id="text" name="text" class="pixel-input is-circle gradient" autocomplete="off" placeholder="Text">
                    <hr>
                    <table>
                        <tr>
                            <td>
                                <p style="font-size: 20px; font-family: FlappyBird; margin: 0;">Key</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="key" name="key" class="pixel-input-small is-circle-small gradient" autocomplete="off" placeholder="Key">
                            </td>
                        </tr>
                    </table>

                    <button name="btnEn" onclick="app.doCrypt(false)" class="nes-btn is-warning">Encrypt</button>
                    <button name="btnDe" onclick="app.doCrypt(true)" class="nes-btn is-warning">Decrypt</button>
                </div>
            </div>
        </div>

    </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', 'assets/particles.json', function() {
            console.log('callback - particles.js config loaded');
        });

        $('#button-start').on('click', function() {
            $('#home').fadeOut('slow')
        });

        $('#button-start').on('click', function() {
            $('#content-main').fadeIn('slow')
        });

        $('#button-back').on('click', function() {
            $('#content-main').fadeOut('slow')
        });

        $('#button-back').on('click', function() {
            $('#home').fadeIn('slow')
        });

        // Tabs
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // AFFINE

        function encrypt_affine() {
            var word, newword, code, newcode, newletter
            var addkey, multkey
            word = document.getElementById("p").value
            word = word.toLowerCase()
            word = word.replace(/\W/g, "")
            addkey = 0

            add = document.getElementById("add")
            mult = document.getElementById("mult")

            for (i = 0; i < add.length; i++) {
                addkey = addkey + (add[i].text) * (add[i].selected)
            }

            multkey = 0

            for (i = 0; i < mult.length; i++) {
                multkey = multkey + (mult[i].text) * (mult[i].selected)
            }

            newword = ""

            for (i = 0; i < word.length; i++) {
                code = word.charCodeAt(i) - 97
                newcode = ((multkey * code + addkey) % 26) + 97
                newletter = String.fromCharCode(newcode)
                newword = newword + newletter
            }

            document.getElementById("c").value = newword + " "
        }

        function decrypt_affine() {
            var word, newword, code, newcode, newletter
            var addkey, multkey, multinverse

            word = document.getElementById("c").value
            word = word.toLowerCase()
            word = word.replace(/\W/g, "")
            addkey = 0

            add = document.getElementById("add")
            mult = document.getElementById("mult")

            for (i = 0; i < add.length; i++) {
                addkey = addkey + (add[i].text) * (add[i].selected)
            }

            multkey = 0

            for (i = 0; i < mult.length; i++) {
                multkey = multkey + (mult[i].text) * (mult[i].selected)
            }

            multinverse = 1

            for (i = 1; i <= 25; i = i + 2) {
                if ((multkey * i) % 26 == 1) {
                    multinverse = i
                }
            }

            newword = ""

            for (i = 0; i < word.length; i++) {
                code = word.charCodeAt(i) - 97
                newcode = ((multinverse * (code + 26 - addkey)) % 26) + 97
                newletter = String.fromCharCode(newcode)
                newword = newword + newletter
            }

            document.getElementById("p").value = newword.toLowerCase()
        }

        // End of Affine

        // Vignere
        const app = new function() {

            /* 
             * Handles the HTML input/output for Vigenère cipher encryption/decription.
             * This is the one and only entry point function called from the HTML code.
             */
            this.doCrypt = function(isDecrypt) {
                const keyStr = document.getElementById("key").value;
                if (keyStr.length == 0) {
                    alert("Key is empty");
                    return;
                }

                let keyArray = filterKey(keyStr);
                if (keyArray.length == 0) {
                    alert("Key has no letters");
                    return;
                }

                if (isDecrypt) {
                    for (let i = 0; i < keyArray.length; i++)
                        keyArray[i] = (26 - keyArray[i]) % 26;
                }

                let textElem = document.getElementById("text");
                textElem.value = crypt(textElem.value, keyArray);
            };


            /* 
             * Returns the result the Vigenère encryption on the given text with the given key.
             */
            function crypt(input, key) {
                let output = "";
                let j = 0;
                for (const ch of input) {
                    const cc = ch.codePointAt(0);
                    if (isUppercase(cc)) {
                        output += String.fromCodePoint((cc - 65 + key[j % key.length]) % 26 + 65);
                        j++;
                    } else if (isLowercase(cc)) {
                        output += String.fromCodePoint((cc - 97 + key[j % key.length]) % 26 + 97);
                        j++;
                    } else {
                        output += ch;
                    }
                }
                return output;
            }


            /* 
             * Returns an array of numbers, each in the range [0, 26), representing the given key.
             * The key is case-insensitive, and non-letters are ignored.
             * Examples:
             * - filterKey("AAA") = [0, 0, 0].
             * - filterKey("abc") = [0, 1, 2].
             * - filterKey("the $123# EHT") = [19, 7, 4, 4, 7, 19].
             */
            function filterKey(key) {
                let result = [];
                for (const ch of key) {
                    const cc = ch.codePointAt(0);
                    if (isLetter(cc))
                        result.push((cc - 65) % 32);
                }
                return result;
            }


            // Tests whether the given character code is a Latin letter.
            function isLetter(c) {
                return isUppercase(c) || isLowercase(c);
            }

            // Tests whether the given character code is an Latin uppercase letter.
            function isUppercase(c) {
                return 65 <= c && c <= 90; // 65 is character code for 'A'. 90 is 'Z'.
            }

            // Tests whether the given character code is a Latin lowercase letter.
            function isLowercase(c) {
                return 97 <= c && c <= 122; // 97 is character code for 'a'. 122 is 'z'.
            }

            // End of Vignere

            // Caesar Cipher
            this.doCryptCaesar = function(isDecrypt) {
                const shiftText = document.getElementById("shift").value;
                if (!/^-?\d+$/.test(shiftText)) {
                    alert("Shift is not an integer");
                    return;
                }
                let shift = parseInt(shiftText, 10);
                if (shift < 0 || shift >= 26) {
                    alert("Shift is out of range");
                    return;
                }
                if (isDecrypt)
                    shift = (26 - shift) % 26;
                let textElem = document.getElementById("text");
                textElem.value = caesarShift(textElem.value, shift);
            };


            /* 
             * Returns the result of having each alphabetic letter of the given text string shifted forward
             * by the given amount, with wraparound. Case is preserved, and non-letters are unchanged.
             * Examples:
             * - caesarShift("abz",  0) = "abz".
             * - caesarShift("abz",  1) = "bca".
             * - caesarShift("abz", 25) = "zay".
             * - caesarShift("THe 123 !@#$", 13) = "GUr 123 !@#$".
             */
            function caesarShift(text, shift) {
                const UPPER_A = "A".codePointAt(0);
                const LOWER_A = "a".codePointAt(0);
                let result = "";
                for (const ch of text) {
                    let cc = ch.codePointAt(0);
                    if (UPPER_A <= cc && cc <= "Z".codePointAt(0)) // Uppercase
                        cc = (cc - UPPER_A + shift) % 26 + UPPER_A;
                    else if (LOWER_A <= cc && cc <= "z".codePointAt(0)) // Lowercase
                        cc = (cc - LOWER_A + shift) % 26 + LOWER_A;
                    result += String.fromCodePoint(cc);
                }
                return result;
            }
            // End of cipher
        };

        // Atbash cipher

        function encode_atbash() {
            plaintext = document.getElementById("plain").value.toLowerCase();
            key = "ZYXWVUTSRQPONMLKJIHGFEDCBA".toLowerCase();
            ciphertext = "";
            var re = /[a-z]/;
            for (i = 0; i < plaintext.length; i++) {
                if (re.test(plaintext.charAt(i))) ciphertext += key.charAt(plaintext.charCodeAt(i) - 97);
                else ciphertext += plaintext.charAt(i);
            }
            document.getElementById("chiper").value = ciphertext;
        }

        function decode_atbash() {
            ciphertext = document.getElementById("chiper").value.toLowerCase();
            key = "ZYXWVUTSRQPONMLKJIHGFEDCBA".toLowerCase();
            plaintext = "";
            var re = /[a-z]/;
            for (i = 0; i < ciphertext.length; i++) {
                if (re.test(ciphertext.charAt(i))) plaintext += String.fromCharCode(key.indexOf(ciphertext.charAt(i)) + 97);
                else plaintext += ciphertext.charAt(i);
            }
            document.getElementById("plain").value = plaintext;
        }

        // End of atbash cipher

        // Hill cipher

        function encode_hill() {
            plaintext = document.getElementById("plain_hill").value.toLowerCase().replace(/[^a-z]/g, "");
            k = document.getElementById("key_hill").value.toLowerCase().replace(/[^0-9 ]/g, "");
            keys = k.split(" ");
            // do some error checking
            if (plaintext.length < 1) {
                alert("please enter some plaintext (letters and numbers only)");
                return;
            }
            if (plaintext.length % 2 == 1) {
                plaintext = plaintext + "x";
            }
            if (keys.length != 4) {
                alert("key should consist of 4 integers");
                return;
            }
            for (i = 0; i < 4; i++) keys[i] = keys[i] % 26;
            ciphertext = "";
            for (i = 0; i < plaintext.length; i += 2) {
                ciphertext += String.fromCharCode((keys[0] * (plaintext.charCodeAt(i) - 97) + keys[1] * (plaintext.charCodeAt(i + 1) - 97)) % 26 + 97);
                ciphertext += String.fromCharCode((keys[2] * (plaintext.charCodeAt(i) - 97) + keys[3] * (plaintext.charCodeAt(i + 1) - 97)) % 26 + 97);
            }
            document.getElementById("cipher_hill").value = ciphertext;
        }

        function decode_hill() {
            ciphertext = document.getElementById("cipher_hill").value.toLowerCase().replace(/[^a-z]/g, "");
            k = document.getElementById("key_hill").value.toLowerCase().replace(/[^0-9 ]/g, "");
            keys = k.split(" ");
            // do some error checking 
            if (ciphertext.length < 1) {
                alert("please enter some ciphertext (letters only, numbers should be spelled)");
                return;
            }
            if (ciphertext.length % 2 == 1) {
                alert("ciphertext is not divisible by 2 (wrong algorithm?)");
                return;
            }
            if (keys.length != 4) {
                alert("key should consist of 4 integers");
                return;
            }
            for (i = 0; i < 4; i++) keys[i] = keys[i] % 26;
            // calc inv matrix
            det = keys[0] * keys[3] - keys[1] * keys[2];
            det = ((det % 26) + 26) % 26;
            di = 0;
            for (i = 0; i < 26; i++) {
                if ((det * i) % 26 == 1) di = i;
            }
            if (di == 0) {
                alert("could not invert, try different key");
                return;
            }
            ikeys = new Array(4);
            ikeys[0] = (di * keys[3]) % 26;
            ikeys[1] = (-1 * di * keys[1]) % 26;
            ikeys[2] = (-1 * di * keys[2]) % 26;
            ikeys[3] = di * keys[0];
            for (i = 0; i < 4; i++) {
                if (ikeys[i] < 0) ikeys[i] += 26;
            }
            plaintext = "";
            for (i = 0; i < ciphertext.length; i += 2) {
                plaintext += String.fromCharCode((ikeys[0] * (ciphertext.charCodeAt(i) - 97) + ikeys[1] * (ciphertext.charCodeAt(i + 1) - 97)) % 26 + 97);
                plaintext += String.fromCharCode((ikeys[2] * (ciphertext.charCodeAt(i) - 97) + ikeys[3] * (ciphertext.charCodeAt(i + 1) - 97)) % 26 + 97);
            }
            document.getElementById("plain_hill").value = plaintext;
        }

        // End of hill cipher

        // Playfair cipher

        function encode_playfair() {
            plaintext = document.getElementById("plain_playfair").value.toLowerCase().replace(/[^a-z]/g, "").replace(/[j]/g, "i");
            keysquare = document.getElementById("keysquare").value.toLowerCase().replace(/[^a-z]/g, "");
            // do some error checking
            if (plaintext.length < 1) {
                alert("please enter some plaintext (letters and numbers only)");
                return;
            }
            if (keysquare.length != 25) {
                alert("keysquare must be 25 characters in length");
                return;
            }
            while (plaintext.length % 2 != 0) plaintext += "x";
            ciphertext = "";
            for (i = 0; i < plaintext.length; i += 2) {
                a = plaintext.charAt(i);
                b = plaintext.charAt(i + 1);
                if (a == b) b = "x";
                row1 = parseInt(keysquare.indexOf(a) / 5);
                col1 = keysquare.indexOf(a) % 5;
                row2 = parseInt(keysquare.indexOf(b) / 5);
                col2 = keysquare.indexOf(b) % 5;
                if (row1 == row2) {
                    if (col1 == 4) c = keysquare.charAt(row1 * 5);
                    else c = keysquare.charAt(row1 * 5 + col1 + 1);
                    if (col2 == 4) d = keysquare.charAt(row2 * 5);
                    else d = keysquare.charAt(row2 * 5 + col2 + 1);
                } else if (col1 == col2) {
                    if (row1 == 4) c = keysquare.charAt(col1);
                    else c = keysquare.charAt((row1 + 1) * 5 + col1);
                    if (row2 == 4) d = keysquare.charAt(col2);
                    else d = keysquare.charAt((row2 + 1) * 5 + col2);
                } else {
                    c = keysquare.charAt(row1 * 5 + col2);
                    d = keysquare.charAt(row2 * 5 + col1);
                }

                ciphertext += c + d;
            }
            document.getElementById("cipher_playfair").value = ciphertext.toUpperCase();
        }

        function decode_playfair() {
            ciphertext = document.getElementById("cipher_playfair").value.toLowerCase().replace(/[^a-z0-9]/g, "").replace(/[j]/g, "i");;
            keysquare = document.getElementById("keysquare").value.toLowerCase().replace(/[^a-z]/g, "");
            if (ciphertext.length < 1) {
                alert("please enter some ciphertext (letters only)");
                return;
            }
            if (ciphertext.length % 2 != 0) {
                alert("ciphertext length must be even.");
                return;
            }
            if (keysquare.length != 25) {
                alert("keysquare must be 25 characters in length");
                return;
            }

            plaintext = "";
            for (i = 0; i < ciphertext.length; i += 2) {
                a = ciphertext.charAt(i);
                b = ciphertext.charAt(i + 1);
                row1 = parseInt(keysquare.indexOf(a) / 5);
                col1 = keysquare.indexOf(a) % 5;
                row2 = parseInt(keysquare.indexOf(b) / 5);
                col2 = keysquare.indexOf(b) % 5;
                if (row1 == row2) {
                    if (col1 == 0) c = keysquare.charAt(row1 * 5 + 4);
                    else c = keysquare.charAt(row1 * 5 + col1 - 1);
                    if (col2 == 0) d = keysquare.charAt(row2 * 5 + 4);
                    else d = keysquare.charAt(row2 * 5 + col2 - 1);
                } else if (col1 == col2) {
                    if (row1 == 0) c = keysquare.charAt(20 + col1);
                    else c = keysquare.charAt((row1 - 1) * 5 + col1);
                    if (row2 == 0) d = keysquare.charAt(20 + col2);
                    else d = keysquare.charAt((row2 - 1) * 5 + col2);
                } else {
                    c = keysquare.charAt(row1 * 5 + col2);
                    d = keysquare.charAt(row2 * 5 + col1);
                }
                plaintext += c + d;
            }
            document.getElementById("plain_playfair").value = plaintext.toUpperCase();
        }

        function GenRandKey() {
            var keychars = "abcdefghiklmnopqrstuvwxyz";
            var chars = keychars.split("");
            ret = "";
            lim = chars.length
            for (i = 0; i < lim; i++) {
                index = Math.floor(chars.length * Math.random());
                ret += chars[index];
                chars.splice(index, 1);
            }
            document.getElementById("keysquare").value = ret;
        }

        // End of playfair

        // Transposition cipher

        function encode_trans() {
            plaintext = document.getElementById("plain_trans").value.toLowerCase().replace(/[^a-z]/g, "");
            if (plaintext.length < 1) {
                alert("please enter some plaintext");
                return;
            }
            var key = document.getElementById("key").value.toLowerCase().replace(/[^a-z]/g, "");
            var pc = document.getElementById("pc").value.toLowerCase().replace(/[^a-z]/g, "");
            if (pc == "") pc = "x";
            while (plaintext.length % key.length != 0) plaintext += pc.charAt(0);
            var colLength = plaintext.length / key.length;
            var chars = "abcdefghijklmnopqrstuvwxyz";
            ciphertext = "";
            k = 0;
            for (i = 0; i < key.length; i++) {
                while (k < 26) {
                    t = key.indexOf(chars.charAt(k));
                    arrkw = key.split("");
                    arrkw[t] = "_";
                    key = arrkw.join("");
                    if (t >= 0) break;
                    else k++;
                }
                for (j = 0; j < colLength; j++) ciphertext += plaintext.charAt(j * key.length + t);
            }
            document.getElementById("cipher_trans").value = ciphertext;
        }

        function decode_trans() {
            ciphertext = document.getElementById("cipher_trans").value.toLowerCase().replace(/[^a-z]/g, "");
            if (ciphertext.length < 1) {
                alert("please enter some ciphertext (letters only)");
                return;
            }
            keyword = document.getElementById("key").value.toLowerCase().replace(/[^a-z]/g, "");
            klen = keyword.length;
            if (klen <= 1) {
                alert("keyword should be at least 2 characters long");
                return;
            }
            if (ciphertext.length % klen != 0) {
                alert("ciphertext has not been padded, the result may be incorrect (incorrect keyword?).");
            }
            // first we put the text into columns based on keyword length
            var cols = new Array(klen);
            var colLength = ciphertext.length / klen;
            for (i = 0; i < klen; i++) cols[i] = ciphertext.substr(i * colLength, colLength);
            // now we rearrange the columns so that they are in their unscrambled state
            var newcols = new Array(klen);
            chars = "abcdefghijklmnopqrstuvwxyz";
            j = 0;
            i = 0;
            while (j < klen) {
                t = keyword.indexOf(chars.charAt(i));
                if (t >= 0) {
                    newcols[t] = cols[j++];
                    arrkw = keyword.split("");
                    arrkw[t] = "_";
                    keyword = arrkw.join("");
                } else i++;
            }
            // now read off the columns row-wise
            plaintext = "";
            for (i = 0; i < colLength; i++) {
                for (j = 0; j < klen; j++) plaintext += newcols[j].charAt(i);
            }
            document.getElementById("plain_trans").value = plaintext;
        }

        // End of transposition
    </script>
</body>

</html>
<?php
/*
 * @package: KLine
 * @subpackage: kline
 */
?>

<div class="contact">
    <div class="grid">
        <div class='mdl-cell mdl-cell--12-col'>
            <header class="contact-header">
                <h1 class='contact-header__title'>Contact Us</h1>
            </header>
        </div>
        <div class='mdl-cell mdl-cell--12-col'>
            <main class="contact-main">
                <!-- Contact Form -->
                <div class='mdl-cell mdl-cell--6-col'>
                    <form method='POST' onsubmit="return contactRequest">
                        <table class='contact-table'>
                            <th>Contact Us</th>
                            <tbody>
                                <tr>
                                    <td><b>Name:*</b></td>
                                    <td>
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input" type="text" id="sample1">
                                            <label class="mdl-textfield__label" for="sample1"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Phone:*</b></td>
                                    <td>
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input" type="text" id="sample1">
                                            <label class="mdl-textfield__label" for="sample1"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Email:*</b></td>
                                    <td>
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input" type="text" id="sample1">
                                            <label class="mdl-textfield__label" for="sample1"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Company:</b></td>
                                    <td>
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input" type="text" id="sample1">
                                            <label class="mdl-textfield__label" for="sample1"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Subject:</b></td>
                                    <td>
                                        <select>
                                            <item ></item>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Message:</b></td>
                                    <td>
                                        <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "4" id="sample5" ></textarea>
    <label class="mdl-textfield__label" for="sample5"></label>
  </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>

                <!--Contact List-->
                <div class='mdl-cell mdl-cell--6-col'>

                </div>
            </main>
        </div>
    </div> <!--End Grid-->
</div> <!--End Contact class-->


{extends file="main.tpl"}
{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}
<!-- Wrapper -->
{block name=content}
<div id="wrapper">
        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1>Login</h1>
                </header>

                <form action="{$conf->action_root}checkLogin" method="post">
                    <div class="fields">
                        <div class="field half">
                            <label for="id_login">login: </label>
                            <input id="id_login" type="text" name="login" value=""/>
                        </div>
                        <div class="field half">
                            <label for="id_pass">pass: </label>
                            <input id="id_pass" type="password" name="pass" />
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="zaloguj" class="primary"/></li>
                        <li><input type="reset" value="Zresetować" /></li>
                    </ul>
                </form>

            </div>
        </section>

    </div>

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
<h4>Wystąpiły błędy: </h4>
<ol class="err">
    {foreach $msgs->getErrors() as $err}
    {strip}
    <li>{$err}</li>
    {/strip}
    {/foreach}
</ol>
{/if}

{/block}
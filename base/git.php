<!--git-->
<ul class="collapsible popout" data-collapsible="accordion">

    <li>
        <div class="collapsible-header">Настройка git</div>
        <div class="collapsible-body">
            <pre data-enlighter-language="ini">
sudo git config --system core.editor "nano"
sudo git config --system core.pager "less"
sudo git config --system help.autocorrect "1"
sudo git config --system color.ui "true"
sudo git config --system push.default "simple"

git config --global user.name "Andrey Lutogin"
git config --global user.email "lutogin@trueconf.ru"
git config --global core.editor "vim"
            </pre>
        </div>
    </li>

    <li>
        <div class="collapsible-header">Подключение в git</div>
        <div class="collapsible-body">
            В терминале открытом в папке с проэктами(www)
            <pre data-enlighter-language="ini">
git init
git remote add origin https://github.com/anlou/hekto.git
git push -u origin master
            </pre>
            Через SSH
            <pre data-enlighter-language="ini">
git clone git@git.trueconf.ru:web/tc-php/main trueconf
git checkout -b v3.6.6 origin/v3.6.6
            </pre>
        </div>
    </li>
</ul>

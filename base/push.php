<!--push-->
<ul class="collapsible popout" data-collapsible="accordion">

    <li>
        <div class="collapsible-header">Написание клиента</div>
        <div class="collapsible-body">
            <pre class="brush: jscript">
                // firebase-messaging-sw.js
                importScripts('https://www.gstatic.com/firebasejs/3.6.8/firebase-app.js');
                importScripts('https://www.gstatic.com/firebasejs/3.6.8/firebase-messaging.js');

                firebase.initializeApp({
                    messagingSenderId: '<SENDER_ID>'
                });

                const messaging = firebase.messaging();
            </pre>
            <pre class="brush: jscript">
                <script type="text/javascript" src="//www.gstatic.com/firebasejs/3.6.8/firebase.js"></script>
                <script type="text/javascript" src="/firebase_subscribe.js"></script>
            </pre>
        </div>
    </li>
</ul>

        <footer class="footer">
            <div class="footer__container">
                <h2>I'm the footer</h2>
            </div>
        </footer>
        
        <script src="<?php echo URLROOT; ?>/js/bundle.js"></script>
        <script>
            (function(name,path,ctx){ctx[name]=ctx[name]||{ready:function(fn){var h=document.getElementsByTagName('head')[0],s=document.createElement('script'),w=window,loaded;s.onload=s.onerror=s.onreadystatechange=function(){if((s.readyState&&!(/^c|loade/.test(s.readyState)))||loaded){return}s.onload=s.onreadystatechange=null;loaded=1;ctx[name].ready(fn)};s.async=1;s.src=path;h.parentNode.insertBefore(s,h)}}})
            ('KeenTracking', 'https://cdn.jsdelivr.net/npm/keen-tracking@4/dist/keen-tracking.min.js', this);

            KeenTracking.ready(function(){
                const client = new KeenTracking({
                projectId: '5c2920a3c9e77c0001cf01cb',
                writeKey: '6E6C32290AE092F25C518FA0BA20C02F93C66FA505093683BF10964871053B958F79AB2EAC51D7A67224946AB57A2839BF81898B15AEBA9FB4DC902D9E43F2529F38F43D8358354529D61C9711E20E30A6D87DFB48E9B62D8603B9CFF9A7D7A6'
                });

                // Record events automatically
                client.initAutoTracking();
            });
        </script>
    </body>
</html>
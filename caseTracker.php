<?php
	require 'includes/header.php'
?>
<main>
    <link rel="stylesheet" href="css/caseTracker.css">
    <h1 class="center" style="padding-left:70px; font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: bold">Coronavirus Live Case Tracker</h1>
    <!-- Below is the case tracker found online to handle live data tracking -->
    <div class="tableauPlaceholder center" id='viz1606581744595' style='position: relative'>
        <noscript>
            <a href='https:&#47;&#47;covidtracking.com&#47;'>
                <img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;CT&#47;CTPWebsiteGallery&#47;2_USPositive&#47;1_rss.png' style='border: none' />
            </a>
        </noscript>
        <object class='tableauViz'  style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='CTPWebsiteGallery&#47;2_USPositive' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;CT&#47;CTPWebsiteGallery&#47;2_USPositive&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en' />
            <param name='origin' value='viz_share_link' />
        </object>
    </div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1606581744595');
            var vizElement = divElement.getElementsByTagName('object')[0];
            vizElement.style.width='1000px';vizElement.style.height='627px';
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
</main>
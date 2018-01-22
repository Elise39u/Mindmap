<div id="container">
    <?php
        $i = 0;
        while($i < 10) { ?>
            <textarea class="textareas" id="textarea<?= $i ?>"><?= $i ?></textarea>
       <?php
          $i++;
        }
    ?>
    <svg class="ball-container">
        <circle cx="150" cy="150" r="80" stroke="black" stroke-width="3" fill="white" />
        <text fill="#000" font-size="45" font-family="Verdana"
              x="100" y="165">Test</text>
        Sorry, your browser does not support inline SVG.
        </svg>
</div>
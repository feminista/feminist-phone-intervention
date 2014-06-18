<?php include 'head.php' ?>

<!-- Send a randomly selected quote as a text message -->
<Response>
    <Message>
    	&quot;<?php echo $quote ?>&quot; -<?php echo $author ?>
    </Message>
</Response>
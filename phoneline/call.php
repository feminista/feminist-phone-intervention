<?php include 'head.php' ?>

<!-- Read a randomly selected quote back to the caller -->
<Response>
    <Say voice="woman">
        <?php echo $quote ?> This quote is brought to you by <?php echo $author ?>.
    </Say>
</Response>
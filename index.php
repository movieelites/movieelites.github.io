<html>
<body>
<div id="target"></div>
</body>

<script>
const queryString = window.location.search;

const urlParams = new URLSearchParams(queryString);

const urlParams = new URLSearchParams(queryString);

const product = urlParams.get('id');


var url = $(this).attr('href');

     url = 'http://movieelites.orgfree.com/play.php?id=' + product;

    $('#target').load(url); sleep(1000);

</script>
</html>

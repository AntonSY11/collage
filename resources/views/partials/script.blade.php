<script type="text/javascript" src="js/materialize.min.js"></script>

<script>
    $(document).ready(function() {
        $('input#input_text, textarea#textarea2').characterCounter();
    });

    var elem = document.querySelector('select');
    var instance = M.FormSelect.init(elem, options);
</script>
</body>
</html>
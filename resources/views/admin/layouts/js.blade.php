<script type="text/javascript">
    $(document).ready( function () {
        $('#usertable').DataTable(); 
    });

    function edit(e){
        
        alert(e.dataset.userid);
    }

    function remove(e){
        alert("a");
    }

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#usertable').DataTable();
        $('#itemtable').DataTable();
    });
    function userAdd() {
        $('#userAdd-modal').modal('show');
    }
    
    function userEdit(e) {
        var name = $(e).parent().parent().children(".name").text();
        var email = $(e).parent().parent().children(".email").text();

        $('#userEdit-form').attr("action",'/admin/users/' + e.dataset.userid);
        $("#modal-edit-id").attr("value",e.dataset.userid);
        $("#modal-edit-name").val(name);
        $("#modal-edit-email").val(email);
        
        $('#userEdit-modal').modal('show');
    }
    $("#userEdit-modal").on("shown.bs.modal", function() {
        
    });
    function userRemove(e) {
        var removeAlert = window.confirm('確認要刪除使用者?');

        if (removeAlert == true) {
            $.ajax({
                url: '/admin/users/' + e.dataset.userid,
                type: 'DELETE',
                data: {
                    _method: 'DELETE',
                    _token: "{{ csrf_token() }}",
                },

                success: function(res) {
                    //alert("a");
                    location.reload(true);
                },
                error: function(err) {
                    //alert(err.status);
                },
            });
        } else {
            alert('您已取消確認');
        }
    }
    function itemAdd() {
        $('#itemAdd-modal').modal('show');
    }
    function itemEdit(e) {
        var title = $(e).parent().parent().children(".title").text();
        var pic = $(e).parent().parent().children(".pic").text();
        var price = $(e).parent().parent().children(".price").text();
        var totle = $(e).parent().parent().children(".totle").text();
        $('#itemEdit-form').attr("action",'/admin/items/' + e.dataset.itemid);
        $("#modal-edit-id").attr("value",e.dataset.itemid);
        $("#modal-edit-title").val(title);
        $("#modal-edit-pic").val(pic);
        $("#modal-edit-price").val(price);
        $("#modal-edit-totle").val(totle);
        $('#itemEdit-modal').modal('show');
    }
    $("#itemEdit-modal").on("shown.bs.modal", function() {
        
    });
    function userRemove(e) {
        var removeAlert = window.confirm('確認要刪除使用者?');

        if (removeAlert == true) {
            $.ajax({
                url: '/admin/items/' + e.dataset.itemid,
                type: 'DELETE',
                data: {
                    _method: 'DELETE',
                    _token: "{{ csrf_token() }}",
                },

                success: function(res) {
                    //alert("a");
                    location.reload(true);
                },
                error: function(err) {
                    //alert(err.status);
                },
            });
        } else {
            alert('您已取消確認');
        }
    }
</script>
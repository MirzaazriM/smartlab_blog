
<p>Blog page</p>

<p>{{$blog->heading}}</p>

<hr>

<div id="text">
    <input id="hid" type="hidden" value="{{$blog->text}}">
    {{$blog->text}}
</div>

<hr>

<p>{{$blog->created_at}}</p>

<script>
    (function() {
        document.getElementById("text").innerHTML = document.getElementById("hid").value;
    })();
</script>
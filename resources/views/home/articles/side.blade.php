<div class="col-md-3 rsidebar span_1_of_3 services_list">
    <ul>
        <h3>分类</h3>
        @foreach ($categories as $k => $category)
            <li><a href="#">{{ $category->name }}</a></li>
        @endforeach
    </ul>
    <!-- <ul class="archive-list">
        <h3>Tags</h3>
        @foreach ($tags as $k => $tag)
        <li><a href="#">{{ $tag->name }}</a></li>
        @endforeach
    </ul> -->

    <ul>
        <h3>时间</h3>
        <li><a href="">November 2013</a></li>
        <li><a href="#">June 2013</a></li>
        <li><a href="#">November 2013</a></li>
        <li><a href="#">Feb 2013</a></li>
        <li><a href="#">Jan 2014</a></li>
    </ul>
</div>
<div class="clearfix"></div>
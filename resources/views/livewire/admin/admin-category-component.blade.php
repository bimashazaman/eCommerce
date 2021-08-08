;p[]
][<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Categories
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Category Name</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                        <tbody>
                                        @foreach($categoies as $category)
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>                   </td>

                                        @endforeach
                                        </tbody>
                            </table>
                           {{$categories->link}}
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

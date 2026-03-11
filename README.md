# Pagination

Pagination is The Technique that is used to show some pages to the used, show some specific data in on page and other remaining data to other page

#### There are three types of Pagination.

(1.) `paginate()`

    DB::table('user')->paginate(5)
    DB::table('user')->paginate(datato show in number)

(2.) `simplePaginate()`

    DB::table('user')->simplePaginate(5)

(3.) `cursorPaginate()`

    DB::table('user')->orderBy('id')->simplePaginate(5)

Cursor is the fastest pagination use use it in the larege scale of data website, where we want to show huge data beacause it is fast.

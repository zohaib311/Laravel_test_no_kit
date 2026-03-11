# Pagination

Pagination is The Technique that is used to show some pages to the used, show some specific data in on page and other remaining data to other page

#### There are three types of Pagination.

(1.) `paginate()`

    DB::table('user')->paginate(5)
    DB::table('user')->paginate(datato show in number)

    Is simply paginate by previous and Next buttons.

(2.) `simplePaginate()`

    DB::table('user')->simplePaginate(5)

    This pagination is mostly used it showes number of pages on below. and also have arrow to navigate.
    it use tailwingCSS by defalt use have to change in
    `App\Providers\AppServiceProvider class:` to use bootstrap.

    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }

(3.) `cursorPaginate()`

    DB::table('user')->orderBy('id')->simplePaginate(5)

    Cursor is the fastest pagination use use it in the larege scale of data website, where we want to show huge data beacause it is fast.

One blade Tepmlate we have to USE
` {{ $employees->links() }}`
where we we want to show that, links, otherwise we won't see links.

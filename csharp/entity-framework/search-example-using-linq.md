### Search Example Using Linq

Other example(s):

```
public IActionResult Index(string movieGenre, string searchString)
{
    // Use LINQ to get list of genres.
    IQueryable<string> genreQuery = from m in _context.Movie
                                    orderby m.Genre
                                    select m.Genre;

    var movies = from m in _context.Movie
                 where
                 select m
                 where

    if (!string.IsNullOrEmpty(searchString))
    {
        movies = movies.Where(s => s.Title.Contains(searchString));
    }

    if (!string.IsNullOrEmpty(movieGenre))
    {
        movies = movies.Where(x => x.Genre == movieGenre);
    }

    var movieGenreVM = new MovieGenreViewModel
    {
        //Genres = new SelectList(await genreQuery.Distinct().ToListAsync()),
        Movies = movies.ToListAsync()
    };

    return View(movieGenreVM);
}
```

- Source(s)
  - [1](#)

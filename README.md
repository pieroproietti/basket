# basket of eggs

This is just the good old [tinyFileManages](https://github.com/prasathmani/tinyfilemanager) with same little touchs to adapt for our scope.

Visit it at: https://penguins-eggs.net/basket/.

## To do

* implement a counter of downloads;
* we need a README.md on every folder to be rendered before filemanager, like in sourceforge.

## Considerations
tinyFileManager is not tiny at all, are more than 5000 lines. We need to find the place where to inject our code, not so much: just a redirector to download.php to count the downloads and a place to check the existance of a README.md and render it before of the tinyFileManager out.

We can use [parsedown](https://parsedown.org/) to render README.md, must to be simple enoght, but where to place is?

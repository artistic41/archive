for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ] && [ $f != "oldFavorites" ]; then
        rm -Rf $f;
        php favpopulate.php;
        git checkout $f/;
        php bets.php $f;
        git checkout favhistory.php;
    fi
done
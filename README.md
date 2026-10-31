# ITRACKB4 LA10 - Movies

Prepared by: Fritz C. Springael

## Q1:
Which column did you turn into a table, and why that one and not another?

[Answer - I chose genre, because it comes from a fixed list (Action, Comedy, Drama), the same values repeat across many movies, and a genre could later need details of its own. year and rating are just numbers, and is_available is true or false.]


## Q2:
What number did screenshot 6 show, and why exactly that number?

[Answer - it showed 10. That is 1 query to fetch the 9 movies, plus 9 more, one per movie, to fetch each movies genre. With with('genre') it dropped to 2.]

## Q3:
Your belongsTo method is named in the singular. What would break if you made it plural?

[Answer - if the method were genres(), Eloquent would look for a column called genres_id in movies. That column doesn’t exist, so the relationship would fail. It looks for the method name plus _id.]
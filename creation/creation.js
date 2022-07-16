// Untagged, these create strings:
`string text`

`string text line 1
 string text line 2`

`string text ${expression} string text`

// Tagged, this calls the function "tagFunction" with the template as the
// first argument and substitution values as subsequent arguments:

// must have multiple sections
tagFunction`string text ${expression} string text`

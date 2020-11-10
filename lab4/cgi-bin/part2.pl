#!/usr/bin/perl
use CGI':standard';
use strict;
print "Content-type: text/html \n\n";

my $genre = param('genre');
my $tb = param('tb');
my $artist = param('artist');

print "<html>";
print "<head>";
print qq~<link rel="stylesheet" type="text/css" href="mystyle2.css">\n~;
print "</head>";
print qq~<body class="cen">~;

print "<p> Here is what we know about you: </p> \n";
print "<p> You like to listen to: $genre </p>";
print "<p> You prefer: $tb </p>";
print "<p> Your favourite artist is: $artist ! </p>";

</body>";
</html>";
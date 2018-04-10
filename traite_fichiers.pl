#!/usr/bin/perl -w

use strict;

#my $dir = '/F';

#my @files = `ls $dir/*xml`;
my @files = `ls *xml`;

foreach my $file (@files) {

	chop $file;

	my $htmlfile = $file;
	$htmlfile =~ s/\.xml$/.txt/;

	my $cmd = "xml2txtMedite_structure.xsl $file > Medite-FC-txt/$htmlfile";

	`xsltproc $cmd`;
	#`$cmd`;

}



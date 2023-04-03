#!/usr/bin/perl
# Prompt for a string
print "Enter a string: ";
my $input = <STDIN>;
chomp $input;

# Remove non-alphanumeric characters and convert to lowercase
$input =~ s/[^a-zA-Z0-9]//g;
$input = lc $input;

# Check if the string is a palindrome
if ($input eq reverse $input) {
    print "The string is a palindrome!\n";
} else {
    print "The string is not a palindrome.\n";
}

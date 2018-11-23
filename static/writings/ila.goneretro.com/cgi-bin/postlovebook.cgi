#!/usr/bin/perl
# This is the absolute pathname of the email log.
$guestbook="/ila/cgi-bin/lovebook.html"; 

# That is the path to PERL just above It MUST be first in the script
# The following accepts the data from the form 

if ($ENV{'REQUEST_METHOD'} eq 'POST') {

    read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});

    @pairs = split(/&/, $buffer);

    foreach $pair (@pairs) {
       ($name, $value) = split(/=/, $pair);
       $value =~ tr/+/ /;
       $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;

    $FORM{$name} = $value;
    }



# The following code posts the log entry 

    open (GUESTBOOK,"<< $guestbook");
   $currenttime=localtime;

# Put the new log entry in.

    print GUESTBOOK "$currenttime from $ENV{'REMOTE_HOST'}<BR>\n";
    print GUESTBOOK "<FONT SIZE=+1>$FORM{name}<\FONT>";<BR>
    print GUESTBOOK " [<A HREF=\"mailto:$FORM{email}\"><I>$FORM{email}</I></A>]<BR>"; 

    if ($FORM{newsletter} eq "yes") 
       {print GUESTBOOK "Subscribed\n\n"; }
    elsif ($FORM{newsletter} eq "no")
       {print GUESTBOOK "Did Not Subscribe\n\n"; }
    else
       {print GUESTBOOK "Did not answer subscription question\n\n"; }

    print GUESTBOOK "<P><FONT SIZE=+1>The user writes:<\FONT><BR>"; 
    print GUESTBOOK "$FORM{feedback}<HR><P>\n";
    close (GUESTBOOK);



# The following sends the email 

    open (MESSAGE,"| /usr/sbin/sendmail -t");

    print MESSAGE "To: $FORM{submitaddress}\n";
    print MESSAGE "From: $FORM{name}\n";
    print MESSAGE "Reply-To: $FORM{email}\n";

    print MESSAGE "Subject: Feedback from $FORM{name} at $ENV{'REMOTE_HOST'}\n\n";
    print MESSAGE "The user wrote:\n\n";
    print MESSAGE "$FORM{feedback}\n";

# Test the answer to the radio button question about the newsletter 

    if ($FORM{newsletter} eq "yes") 
       {print MESSAGE "We will subscribe you to our newsletter right away!\n\n"; }
    elsif ($FORM{newsletter} eq "no")
       {print MESSAGE "You should rethink not signing up for the newsletter.\n\n"; }
    else 
       {print MESSAGE "Oh, I see, you're too good to answer the question.\n\n"; } 

    close (MESSAGE);

    &thank_you;
} 




#The following creates the Thank You page display 

sub thank_you {

    print "Content-type: text/html\n\n";
    print "<HTML>\n";
    print "<HEAD>\n";
    print "<TITLE>Thank You!</TITLE>\n";
    print "</HEAD>\n";
    print "<BODY BGCOLOR=#FFFFCC TEXT=#000000>\n";
    print "<H1>Thank You!</H1>\n";
    print "\n";
    print "<P>\n";
    print "<H3>Your feedback is greatly appreciated.<BR>\n";

#Print result to radio button newsletter question 

    if ($FORM{newsletter} eq "yes") 
       {print "We will subscribe you to our newsletter right away!\n\n"; }
    elsif ($FORM{newsletter} eq "no")
       {print "What?!?!? Our newsletter isn't good enough for you? Huh?!?!?.\n\n"; }
    else
       {print "Oh, I see. You're too good to answer the question!\n\n"} 

    print "<P>\n";
    print "</BODY>\n";
    print "</HTML>\n";
    exit(0);
}

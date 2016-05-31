<?php 
function topdf($filename, $options = "") {
	# Tell HTMLDOC not to run in CGI mode...
        putenv("HTMLDOC_NOCGI=1");

	# Write the content type to the client...
	header("Content-Type: application/pdf");
	flush();

	# Run HTMLDOC to provide the PDF file to the user...
	passthru("htmldoc -t pdf --quiet --jpeg --webpage $options '$filename'");
    }
topdf("yourpage.html");
?>




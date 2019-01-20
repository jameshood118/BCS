<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body><?php 
//
// A list of sentences:
// 
// %something ==> is a variable 
//
$r_sentences = '
This is a %adjective %noun %sentence_ending
This is another %noun %noun %sentence_ending
I %love_or_hate %nouns , because it is %adjective %sentence_ending
My %family says you are not %adjective %sentence_ending
These %nouns are %adjective %sentence_ending
';
 
//
// This is another list of variables:
// (This list can also contain variables (like %something))
//
// Formatting:
// (first-line) = Variablename
// (second-line) = Variables (seperated by semicolon)
//
 
$r_variables = '
adjective
%adjective_list;very %adjective_list;deadly %adjective_list
 
adjective_list
big;huge;small;red;blue;cool;yellow;pink;fluffy;stupid;clever;fat;lazy;boring
 
noun
%noun_list;%adjective %noun_list
 
noun_list
sentence;beer;cow;monkey;donkey;example;ice cream;dog
 
nouns
beers;monkeys;donkeys;examples;cars;trees;birds;dogs
 
love_or_hate
love;hate;like
 
family
%adjective %family_members;%family_members
 
family_members
grandpa;brother;sister;mom;dad;grandma
 
sentence_ending
.;!;!!;!?;*lol*
';
 
// strip spaces:
$r_sentences = trim($r_sentences);
$r_variables = trim($r_variables);
 
// fix new lines and split sentences up:
$r_sentences = str_replace("\r\n", "\n", $r_sentences);
$r_sentences = str_replace("\r", "\n", $r_sentences);
$r_sentences = explode("\n", $r_sentences);
 
$r_variables = str_replace("\r\n", "\n", $r_variables);
$r_variables = str_replace("\r", "\n", $r_variables);
$r_variables = explode("\n\n", $r_variables);
 
// this array contains all variables:
$r_vars = array();
 
// go trough all variables:
for($x=0; $x < count($r_variables); $x++){
 
    $var = explode("\n", trim($r_variables[$x]));
 
    // lowecase all:
    $key = strtolower(trim($var[0]));
 
    // split words:
    $words = explode(";", trim($var[1]));
 
    // add variables to the $r_vars Array
    $r_vars[$key] = $words;
 
}
 
// returns a word from the variables array:
function get_word($key){
    global $r_vars;
 
    if (isset($r_vars[$key])){
 
        $words = $r_vars[$key];
 
        // calc max.
        $w_max = count($words)-1;
        $w_rand = rand(0, $w_max);
 
        // return the word, and check if the word contains
        // another variable:
        return replace_words(trim($words[$w_rand]));
 
    }
    else {
        // the word was not found :-(
        return "(Error: Word '$key' was not found!)";
    }
 
}
 
// this function replaces a variable like %something with
// the 	proper variable-value:
 
function replace_words($sentence){
 
    // if there are no variables in the sentence,
    // return it without doing anything
    if (str_replace('%', '', $sentence) == $sentence)
        return $sentence;
 
    // split the words up:
    $words = explode(" ", $sentence);
 
    $new_sentence = array();
 
    // go trough all words:
    for($w=0; $w < count($words); $w++){
 
        $word = trim($words[$w]);
 
        if ($word != ''){
 
            // is this word a variable?
            if (preg_match('/^%(.*)$/', $word, $m)){
 
                // --> yes
                $varkey = trim($m[1]);
 
                // get the proper word from the variable list:
                $new_sentence[] = get_word($varkey);
            }
            else {
                // --> no it is a default word
                $new_sentence[] = $word;
            }
 
        }
 
    }
 
    // join the array to a new sentence:
    return implode(" ", $new_sentence);    
}
 
// calc. max.
$max_s = count($r_sentences)-1;
$rand_s = rand(0, $max_s);
 
// get a random sentence:
$sentence = $r_sentences[$rand_s];
 
// format the resulting sentence, so that I looks nice:
// (delete whitespace infront of punctuation marks)
$sentence = str_replace(' ,', ',', ucfirst(replace_words($sentence)));
$sentence = str_replace(' .', '.', $sentence);
$sentence = str_replace(' !', '!', $sentence);
$sentence = str_replace(' ?', '?', $sentence);
$sentence = trim($sentence);
 
// finally print the new sentence! :-D
print $sentence; ?>
</body>
</html>

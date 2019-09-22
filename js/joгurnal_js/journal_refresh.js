setInterval(function() {
    $("#journal_content").load("/php/journal/view_journal.php");
}, 360000);
console.log('произошло обновление');

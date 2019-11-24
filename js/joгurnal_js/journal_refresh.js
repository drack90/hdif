setInterval(function() {
    $("#journal_content").load("/php/journal/view_journal.php");
}, 3600000);
console.log('произошло обновление');

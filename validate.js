$(document).ready(function() {    
    $('#btn-submit').click(function(event) {
        let error = false;
        const topic = $('#topic_dek').val();
        const content = $('#content_dek').val();

        let checkT = false;
        let checkC = false;

        // Clear previous error messages
        $('#warningTopic').empty();
        $('#warningContent').empty();

        // Validate topic
        if (topic == '') {
            $('#warningTopic').text("Please enter a topic!");
            error = true;
        } else {
            
            // if <> is found return true
            if ((/<[^>]*>/i.test(topic))) {
                $('#warningTopic').text("Topic should not contain HTML Tags!");
                error = true;
            } 
            else {
                let chr_topic = topic.trim();
                let len_topic = chr_topic.length;

                if (len_topic >= 4 && len_topic <= 140) {
                    checkT = true;
                }   
                else {
                    $('#warningTopic').text("Topic should have 4-140 characters!");
                    error = true;
                }
            }                 
        }

        // Validate content
        if (content == '') {
            $('#warningContent').text("Please enter a content!");
            error = true;
        } else {
            let chr_content = content.trim();
            let len_content = chr_content.length;

            if (len_content >= 6 && len_content <= 2000) {
                checkC = true;
            }     
            else {
                $('#warningContent').text("Content should have 6-2000 characters!");
                error = true;
            }
        }

        
        // Prevent form submission if there are errors
        if (error) {
            event.preventDefault();
        } else if (checkT && checkC) {
            $.post('server.php', {topic_dek: topic, content_dek: content});
        } 
    });
});
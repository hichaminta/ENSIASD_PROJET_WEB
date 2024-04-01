    $(document).ready(function() {
        // Reference to the input field
        var $searchInput = $('#searchInput');

        // Reference to the table body
        var $tableBody = $('#dataTable tbody');

        // Event listener for input changes
        $searchInput.on('input', function() {
            var query = $searchInput.val().toLowerCase();

            // Filter table rows
            $tableBody.find('tr').each(function() {
                var $row = $(this);

                // Check if any cell in the row contains the search query
                var found = false;
                $row.find('td').each(function() {
                    var cellText = $(this).text().toLowerCase();
                    if (cellText.indexOf(query) !== -1) {
                        found = true;
                        return false; // Exit the loop early if a match is found
                    }
                });

                // Show/hide the row based on the search result
                if (found) {
                    $row.show();
                } else {
                    $row.hide();
                }
            });
        });
    });
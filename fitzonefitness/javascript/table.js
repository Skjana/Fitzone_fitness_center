document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.class-btn');
    const tableCells = document.querySelectorAll('tbody td:not(:first-child)');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const selectedClass = this.getAttribute('data-class');

            tableCells.forEach(cell => {
                // Reset all cells
                cell.style.backgroundColor = '';
                cell.style.color = '';

                if (selectedClass === 'All Classes') {
                    cell.classList.remove('hidden');
                } else {
                    if (cell.classList.contains(selectedClass)) {
                        cell.style.backgroundColor = '#d79447';
                        cell.style.color = 'white';
                    } else {
                        cell.classList.add('hidden');
                    }
                }
            });
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {

    $(document).ready(function() {
        var $elem = $('.canvas-wrapper');
        
        function getCanvasDimensions() {
            return {
                width: $elem.width(),
                height: $elem.height()
            };
        }

        var params = getCanvasDimensions();
        var two = new Two(params).appendTo($elem[0]);

        function drawGrid(spacing = 50) {
            for (let x = 0; x <= two.width; x += spacing) {
                two.makeLine(x, 0, x, two.height).stroke = '#bababaff';
            }
            for (let y = 0; y <= two.height; y += spacing) {
                two.makeLine(0, y, two.width, y).stroke = '#bababaff';
            }
        }

        drawGrid();

        var rect = two.makeRectangle(300, 300, 100, 100);
        rect.fill = '#3498db';
        rect.stroke = '#2980b9';
        two.update();

        function handleResize() {
            var newDimensions = getCanvasDimensions();
            two.width = newDimensions.width;
            two.height = newDimensions.height;
            two.renderer.setSize(newDimensions.width, newDimensions.height);

            drawGrid();

            rect.translation.set(two.width / 2, two.height / 2);

            two.update();
        }

        $(window).resize(handleResize);

        var zoomLevel = 1;
        const zoomStep = 0.1;
        const minZoom = 0.5;
        const maxZoom = 1.5;

        function zoomIn() {
            if (zoomLevel < maxZoom) {
                zoomLevel = Math.min(maxZoom, zoomLevel + zoomStep);
                two.scene.scale = zoomLevel;
                two.update();
            }
        }

        function zoomOut() {
            if (zoomLevel > minZoom) {
                zoomLevel = Math.max(minZoom, zoomLevel - zoomStep);
                two.scene.scale = zoomLevel;
                two.update();
            }
        }

        $('#zoomInBtn').click(zoomIn);
        $('#zoomOutBtn').click(zoomOut);

        $elem.on('wheel', function(e) {
            if (e.ctrlKey) {
                e.preventDefault();

                if (e.originalEvent.deltaY < 0) {
                    zoomIn();
                } else {
                    zoomOut();
                }
            }
        });

        $(document).keydown(function(e) {
            if (e.ctrlKey) {
                if (e.key === '+' || e.key === '=') {
                    e.preventDefault();
                    zoomIn();
                } else if (e.key === '-' || e.key === '_') {
                    e.preventDefault();
                    zoomOut();
                }
            }
        });

        let isDragging = false;
        let lastX, lastY;

        const panLimit = 250;

        $elem.mousedown(function(e) {
            isDragging = true;
            lastX = e.clientX;
            lastY = e.clientY;
            $elem.addClass('dragging');
            $('body').addClass('dragging');
        });

        $(document).mousemove(function(e) {
            if (!isDragging) return;

            let dx = e.clientX - lastX;
            let dy = e.clientY - lastY;

            let newX = two.scene.translation.x + dx;
            let newY = two.scene.translation.y + dy;

            newX = Math.max(-panLimit, Math.min(panLimit, newX));
            newY = Math.max(-panLimit, Math.min(panLimit, newY));

            two.scene.translation.x = newX;
            two.scene.translation.y = newY;

            lastX = e.clientX;
            lastY = e.clientY;

            two.update();
        });

        $(document).mouseup(function() {
            if (isDragging) {
                isDragging = false;
                $elem.removeClass('dragging');
                $('body').removeClass('dragging');
            }
        });
    })

});
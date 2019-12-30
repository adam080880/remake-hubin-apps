<style>
    .loading {
        width:100px;
        height:10px;
        background-color:#f7f7f7;
        border-radius:5px;
        overflow-x:hidden;        
        overflow-y:hidden;
    }

    .bar {
        width:30%;
        height:10px;
        border-radius:5px;
        background-color:#1abb9c;
        animation: loading_ infinite 1s;
    }

    @keyframes loading_ {
        0% {
            margin-right:70px;
        }

        50% {
            margin-left:70px;
        }
    }
</style>

<div class="loading">
    <div class="bar"></div>
</div>
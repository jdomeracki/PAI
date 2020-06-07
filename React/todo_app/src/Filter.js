import React from 'react';

function Filter({ filter, hideCompleted }) {

    function handleClick() {
        hideCompleted(filter)
    }

    return (
        <div>
            <input type="checkbox" onClick={handleClick} />
            <label>Hide completed</label>
        </div>
    );
}

export default Filter;
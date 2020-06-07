import React, { useEffect, useState } from 'react';
import './App.css';
import NewTask from './NewTask';
import Filter from './Filter';
import ToDoList from './ToDoList';

const Storage = "todo_list";

function App() {

  const [tasks, updateTasks] = useState([])
  const [filter, setFilter] = useState(false)

  useEffect(() => {
    const storedTasks = JSON.parse(localStorage.getItem(Storage));
    if (storedTasks) {
      updateTasks(storedTasks);
    }
  }, []);

  useEffect(() => {
    localStorage.setItem(Storage, JSON.stringify(tasks));
  }, [tasks]);

  function appendTask(task) {
    updateTasks([...tasks, task])
  }

  function hideCompleted(filter) {
    setFilter(!filter)
  }

  function changeStatus(id) {
    updateTasks(
      tasks.map(task => {
        if (task.id === id) {
          return {
            ...task,
            status: !task.status
          }
        }
        return task
      })
    )
  }

  return (
    <div className="App">
      <h1>Welcome to my TODO list!</h1>
      <Filter filter={filter} hideCompleted={hideCompleted} />
      <hr></hr>
      <ToDoList tasks={tasks} changeStatus={changeStatus} filter={filter} />
      <hr></hr>
      <NewTask appendTask={appendTask} />
    </div>
  );
}

export default App;

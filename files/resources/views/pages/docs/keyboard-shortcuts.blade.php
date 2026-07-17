<!-- Docs — served at "/docs/keyboard-shortcuts". The sidebar comes from the docs collection. -->
<x-layouts.doc
    title="Keyboard shortcuts"
    description="The full map of the keyboard-first interface — navigation, actions, and the command menu."
    section="Reference"
    :nav="$docs">

    <p>Draft is designed so your hands never leave the keys. Three shortcuts carry most sessions — <kbd>Cmd K</kbd>, <kbd>C</kbd>, and <kbd>J</kbd> / <kbd>K</kbd> — and the rest reward the habit. Every binding below is remappable in Settings.</p>

    <h2>The command menu</h2>

    <table>
        <thead>
            <tr>
                <th>Keys</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr><td><kbd>Cmd K</kbd></td><td>Open the command menu — every action lives here</td></tr>
            <tr><td><kbd>Enter</kbd></td><td>Run the highlighted action</td></tr>
            <tr><td><kbd>Tab</kbd></td><td>Peek the highlighted result without leaving the menu</td></tr>
            <tr><td><kbd>Esc</kbd></td><td>Close — always, from anywhere, no exceptions</td></tr>
        </tbody>
    </table>

    <h2>Navigation</h2>

    <table>
        <thead>
            <tr>
                <th>Keys</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr><td><kbd>J</kbd> / <kbd>K</kbd></td><td>Move down / up in any list</td></tr>
            <tr><td><kbd>G</kbd> then <kbd>I</kbd></td><td>Go to Inbox</td></tr>
            <tr><td><kbd>G</kbd> then <kbd>C</kbd></td><td>Go to the current cycle</td></tr>
            <tr><td><kbd>G</kbd> then <kbd>R</kbd></td><td>Go to Releases</td></tr>
            <tr><td><kbd>Space</kbd></td><td>Peek the selected issue without opening it</td></tr>
        </tbody>
    </table>

    <h2>Working with issues</h2>

    <table>
        <thead>
            <tr>
                <th>Keys</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr><td><kbd>C</kbd></td><td>Create an issue from anywhere</td></tr>
            <tr><td><kbd>A</kbd></td><td>Assign the selected issue</td></tr>
            <tr><td><kbd>S</kbd></td><td>Set status</td></tr>
            <tr><td><kbd>P</kbd></td><td>Set priority</td></tr>
            <tr><td><kbd>L</kbd></td><td>Add or remove labels</td></tr>
            <tr><td><kbd>Shift D</kbd></td><td>Mark as duplicate of…</td></tr>
        </tbody>
    </table>

    <h2>The review queue</h2>

    <table>
        <thead>
            <tr>
                <th>Keys</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr><td><kbd>J</kbd> / <kbd>K</kbd></td><td>Next / previous proposal</td></tr>
            <tr><td><kbd>Enter</kbd></td><td>Accept the proposal</td></tr>
            <tr><td><kbd>X</kbd></td><td>Dismiss the proposal</td></tr>
            <tr><td><kbd>Shift Enter</kbd></td><td>Accept everything from this agent today</td></tr>
        </tbody>
    </table>

    <p>One habit worth forming: when you don't know the shortcut, don't reach for the mouse — open <kbd>Cmd K</kbd> and type the action's name. The menu shows the binding beside every result, and you'll have learned it by the third use.</p>

</x-layouts.doc>

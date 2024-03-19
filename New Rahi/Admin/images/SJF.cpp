#include <iostream>
#include <algorithm>
using namespace std;

struct Process {
    int pid;        // process ID
    int arrival;    // arrival time
    int burst;      // burst time
};

bool compare(Process p1, Process p2) {
    return p1.burst < p2.burst;
}

void sjf_scheduling(Process processes[], int n) {
    sort(processes, processes + n, compare);
    int t = 0;      // current time

    for (int i = 0; i < n; i++) {
        while (t < processes[i].arrival) {
            t++;
        }
        t += processes[i].burst;
        cout << "Process " << processes[i].pid << ": " << processes[i].arrival << " - " << t << endl;
    }
}

int main() {
    Process processes[] = { {1, 0, 3}, {2, 1, 4}, {3, 2, 2} };
    int n = sizeof(processes) / sizeof(processes[0]);
    sjf_scheduling(processes, n);
    return 0;
}
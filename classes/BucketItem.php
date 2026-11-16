<?php
/**
 * BucketItem-klass
 * Representerar en sak på bucketlisten och hanterar CRUD-operationer.
 */
class BucketItem {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    /**
     * Hämtar alla items, sorterade efter prioritet (lägst siffra = högst prio)
     */
    public function getAll(): array {
        $stmt = $this->db->query("SELECT * FROM bucket_items ORDER BY priority ASC, created_at DESC");
        return $stmt->fetchAll();
    }

    /**
     * Hämtar ett enskilt item via id
     */
    public function getById(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM bucket_items WHERE id = ?");
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result ?: null;
    }

    /**
     * Lägger till ett nytt item
     * Returnerar true vid lyckad insert, annars false
     */
    public function create(string $name, string $description, int $priority): bool {
        $stmt = $this->db->prepare(
            "INSERT INTO bucket_items (name, description, priority) VALUES (?, ?, ?)"
        );
        return $stmt->execute([$name, $description, $priority]);
    }

    /**
     * Raderar ett item
     */
    public function delete(int $id): bool {
        $stmt = $this->db->prepare("DELETE FROM bucket_items WHERE id = ?");
        return $stmt->execute([$id]);
    }

    /**
     * Uppdaterar ett item (valfritt, men bra att ha)
     */
    public function update(int $id, string $name, string $description, int $priority): bool {
        $stmt = $this->db->prepare(
            "UPDATE bucket_items SET name = ?, description = ?, priority = ? WHERE id = ?"
        );
        return $stmt->execute([$name, $description, $priority, $id]);
    }
}